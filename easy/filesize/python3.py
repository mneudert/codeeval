import os
import sys

if len(sys.argv) != 2:
    sys.stderr.write('Input file missing\n')
    sys.exit(1)

sys.stdout.write(str(os.path.getsize(sys.argv[1])) + '\n')
