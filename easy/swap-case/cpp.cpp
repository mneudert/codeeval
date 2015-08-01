#include <stdio.h>

int main(int argc, char **argv) {
  FILE    *fp;
  char    *line;
  int      i;
  size_t   len, read;

  fp = fopen(argv[1], "r");

  while (-1 != (read = getline(&line, &len, fp))) {
    for (i = 0; line[i] != '\0'; ++i) {
      if (65 <= line[i] && 90 >= line[i]) {
        line[i] += 32;
        continue;
      }

      if (97 <= line[i] && 122 >= line[i]) {
        line[i] -= 32;
        continue;
      }
    }

    fputs(line, stdout);
  }

  return 0;
}
