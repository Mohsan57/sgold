#!/usr/bin/env python3
"""
generate_gallery_manifest.py

Scans `assets/gallery/` for image and video files and writes
`assets/gallery/gallery.json` listing them (paths relative to site root).

Usage:
  python3 generate_gallery_manifest.py
  python3 generate_gallery_manifest.py --dir assets/gallery --out assets/gallery/gallery.json
"""
import argparse
from pathlib import Path
import json

DEFAULT_DIR = Path('assets/gallery')
DEFAULT_OUT = DEFAULT_DIR / 'gallery.json'

EXTS = {'.jpg','.jpeg','.png','.gif','.webp','.svg','.mp4','.webm','.ogg'}

def build_manifest(directory: Path):
    files = []
    for p in sorted(directory.iterdir()):
        if p.is_file() and p.suffix.lower() in EXTS:
            # use a site-relative path
            files.append(str(p.as_posix()))
    return files

def main():
    p = argparse.ArgumentParser()
    p.add_argument('--dir', default=str(DEFAULT_DIR))
    p.add_argument('--out', default=str(DEFAULT_OUT))
    args = p.parse_args()

    d = Path(args.dir)
    if not d.exists() or not d.is_dir():
        print('Directory not found:', d)
        return

    files = build_manifest(d)
    out = Path(args.out)
    out.parent.mkdir(parents=True, exist_ok=True)
    with out.open('w', encoding='utf-8') as fh:
        json.dump(files, fh, indent=2)
    print(f'Wrote {len(files)} items to {out}')

if __name__ == '__main__':
    main()
