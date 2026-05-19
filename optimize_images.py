#!/usr/bin/env python3
"""Optimize images under assets/products/raw using Pillow.

Usage examples:
  python3 optimize_images.py
  python3 optimize_images.py --source assets/products/raw --output assets/products/optimized
  python3 optimize_images.py --source assets/products/raw --in-place --max-dimension 1600 --quality 85
"""

import argparse
import os
from pathlib import Path
from PIL import Image, ImageOps

SUPPORTED_EXTENSIONS = (".jpg", ".jpeg", ".png", ".webp", ".bmp", ".tiff", ".tif")


def parse_args():
    parser = argparse.ArgumentParser(description="Optimize product images under assets/products/raw.")
    parser.add_argument(
        "--source",
        default="assets/products/raw",
        help="Source directory for raw images.",
    )
    parser.add_argument(
        "--output",
        default="assets/products/optimized",
        help="Output directory for optimized images when not running in-place.",
    )
    parser.add_argument(
        "--in-place",
        action="store_true",
        help="Overwrite source images in place.",
    )
    parser.add_argument(
        "--max-dimension",
        type=int,
        default=1600,
        help="Maximum width/height for resized images.",
    )
    parser.add_argument(
        "--quality",
        type=int,
        default=85,
        help="Quality level for WebP output (1-100).",
    )
    return parser.parse_args()


def find_images(source_dir):
    source_path = Path(source_dir)
    if not source_path.exists():
        raise FileNotFoundError(f"Source folder does not exist: {source_path}")

    return [path for path in source_path.iterdir() if path.suffix.lower() in SUPPORTED_EXTENSIONS]


def optimize_image(path, output_path, max_dimension, quality):
    try:
        with Image.open(path) as image:
            image = ImageOps.exif_transpose(image)

            if image.width > max_dimension or image.height > max_dimension:
                image.thumbnail((max_dimension, max_dimension), Image.LANCZOS)

            output_path = output_path.with_suffix(".webp")
            output_path.parent.mkdir(parents=True, exist_ok=True)

            if image.mode not in ("RGB", "RGBA"):
                image = image.convert("RGBA")

            save_params = {
                "quality": quality,
                "method": 6,
            }
            image.save(output_path, format="WEBP", **save_params)
            return True, output_path
    except Exception as exc:
        print(f"Failed to optimize {path}: {exc}")
        return False, None


def format_size(size_bytes):
    for unit in ["B", "KB", "MB", "GB"]:
        if size_bytes < 1024.0:
            return f"{size_bytes:.1f}{unit}"
        size_bytes /= 1024.0
    return f"{size_bytes:.1f}TB"


def main():
    args = parse_args()
    source_dir = Path(args.source)
    image_paths = find_images(source_dir)

    if not image_paths:
        print(f"No supported image files found in {source_dir}")
        return

    total_before = 0
    total_after = 0
    optimized = 0

    for image_path in sorted(image_paths):
        if args.in_place:
            out_path = image_path
        else:
            out_path = Path(args.output) / image_path.name
        before_size = image_path.stat().st_size

        success, final_path = optimize_image(image_path, out_path, args.max_dimension, args.quality)
        if not success:
            continue

        if args.in_place and final_path != image_path:
            try:
                image_path.unlink()
            except Exception:
                pass
        if not success:
            continue

        after_size = final_path.stat().st_size
        total_before += before_size
        total_after += after_size
        optimized += 1

        reduction = 100.0 * (before_size - after_size) / before_size if before_size else 0.0
        print(
            f"{image_path.name}: {format_size(before_size)} -> {format_size(after_size)} "
            f"({reduction:.1f}% smaller) -> {final_path.name}"
        )

    print("\nOptimization complete.")
    print(f"Images processed: {optimized}")
    print(f"Total size before: {format_size(total_before)}")
    print(f"Total size after:  {format_size(total_after)}")
    if total_before:
        print(f"Total reduction: {100.0 * (total_before - total_after) / total_before:.1f}%")


if __name__ == "__main__":
    main()
