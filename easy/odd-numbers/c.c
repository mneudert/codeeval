#include <stdio.h>

int main() {
    int i;

    for (i = 1; i < 100; i = i + 2) {
        printf("%d\n", i);
    }

    return 0;
}
