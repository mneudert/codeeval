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
		elements := strings.Split(string(line), ",")
		sentence := elements[0]
		test := elements[1]

		if len(sentence) < len(test) {
			fmt.Println("0")
		} else if test == sentence[len(sentence)-len(test):] {
			fmt.Println("1")
		} else {
			fmt.Println("0")
		}

		line, _, rErr = reader.ReadLine()
	}
}
