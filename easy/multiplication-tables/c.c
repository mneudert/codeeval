#include <stdio.h>

int main() {
  int x, y;

  for (x = 1; x <= 12; ++x) {
    fprintf(stdout, "%d", x);

    for (y = 2; y <= 12; ++y) {
      fprintf(stdout, "%4d", x * y);
    }

    puts("");
  }

  return 0;
}
