import sys

test_cases = open(sys.argv[1], 'r')

for test in test_cases:
    sys.stdout.write('1')

    for i in range(1, int(test)):
        sys.stdout.write(' 1')

        current = 1

        for j in range(1, i + 1):
            current = int((current * (i + 1 - j)) / j)

            sys.stdout.write(' ')
            sys.stdout.write(str(current))

    sys.stdout.write('\n')

test_cases.close()
