package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"
)

var conv = map[string]int{
	"zero":  0,
	"one":   1,
	"two":   2,
	"three": 3,
	"four":  4,
	"five":  5,
	"six":   6,
	"seven": 7,
	"eight": 8,
	"nine":  9,
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	digits, _, rErr := reader.ReadLine()

	for rErr == nil {
		for _, digit := range strings.Split(string(digits), ";") {
			fmt.Print(conv[digit])
		}

		fmt.Println()

		digits, _, rErr = reader.ReadLine()
	}
}
