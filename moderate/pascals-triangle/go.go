package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		depth, _ := strconv.Atoi(string(line))

		fmt.Print("1")

		for i := 1; i < depth; i += 1 {
			fmt.Print(" 1")

			current := 1

			for j := 1; j <= i; j += 1 {
				current = (current * (i + 1 - j)) / j

				fmt.Printf(" %d", current)
			}
		}

		fmt.Println()
		line, _, rErr = reader.ReadLine()
	}
}
