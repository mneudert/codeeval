package main

import (
	"bufio"
	"fmt"
	"os"
)

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	chars, _, rErr := reader.ReadLine()

	for rErr == nil {
		for _, char := range chars {
			if 65 <= char && 90 >= char {
				fmt.Print(string(char + 32))
				continue
			}

			if 97 <= char && 122 >= char {
				fmt.Print(string(char - 32))
				continue
			}

			fmt.Print(string(char))
		}

		fmt.Println()
		chars, _, rErr = reader.ReadLine()
	}
}
