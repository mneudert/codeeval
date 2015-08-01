#include <stdio.h>

int main(int argc, char **argv) {
  FILE *fp;
  char  c;
  int   sum;

  fp  = fopen(argv[1], "r");
  sum = 0;

  while (!feof(fp)) {
    c = getc(fp);

    if ('\n' == c) {
      printf("%d\n", sum);

      sum = 0;
    } else {
      sum += c - '0';
    }
  }

  return 0;
}
