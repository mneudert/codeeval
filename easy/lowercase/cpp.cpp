#include <stdio.h>
#include <stdlib.h>
#include <algorithm>
#include <string>

int main(int argc, char **argv) {
  FILE    *fp;
  char    *line = NULL;
  size_t   len  = 0;
  ssize_t  read;

  fp = fopen(argv[1], "r");

  while (-1 != (read = getline(&line, &len, fp))) {
    std::string lower (line);
    std::transform(lower.begin(), lower.end(), lower.begin(), ::tolower);

    fputs(lower.c_str(), stdout);
  }

  return 0;
}
