#include <stdio.h>
#include <stdlib.h>

int main(int argc, char **argv) {
  FILE    *fp;
  char    *line;
  int      i;
  size_t   len, read;

  fp = fopen(argv[1], "r");

  while (-1 != (read = getline(&line, &len, fp))) {
    for (i = 0; line[i] != '\0'; ++i) {
      line[i] = tolower(line[i]);
    }

    fputs(line, stdout);
  }

  return 0;
}
