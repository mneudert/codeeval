package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"
)

func swapNumbers(line string) {
	words := strings.Split(line, " ")

	for i, _ := range words {
		c_first := words[i][:1]
		retain := words[i][1 : len(words[i])-1]
		c_last := words[i][len(words[i])-1:]

		words[i] = strings.Join([]string{c_last, retain, c_first}, "")
	}

	fmt.Println(strings.Join(words, " "))
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		swapNumbers(string(line))

		line, _, rErr = reader.ReadLine()
	}
}
