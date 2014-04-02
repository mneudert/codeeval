package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"
)

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		words := strings.Split(string(line), " ")

		for index, word := range words {
			words[index] = strings.ToUpper(word[0:1]) + word[1:]
		}

		fmt.Println(strings.Join(words, " "))
		line, _, rErr = reader.ReadLine()
	}
}
