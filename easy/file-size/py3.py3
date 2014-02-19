import os, sys

sys.stdout.write(str(os.path.getsize(sys.argv[1])) + '\n')
