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
	number, _, rErr := reader.ReadLine()

	for rErr == nil {
		modifier, _ := strconv.Atoi(string(number[len(number)-1:]))

		fmt.Println((1 + modifier) % 2)

		number, _, rErr = reader.ReadLine()
	}
}
