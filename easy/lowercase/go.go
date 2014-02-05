package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"
)

func main() {
	if 2 != len(os.Args) {
		fmt.Println("Input file missing!")
		os.Exit(1)
	}

	file, oErr := os.Open(os.Args[1])
	if oErr != nil {
		fmt.Printf("Error opening file: %v\n", oErr)
		os.Exit(1)
	}

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		fmt.Println(strings.ToLower(string(line)))

		line, _, rErr = reader.ReadLine()
	}
}
