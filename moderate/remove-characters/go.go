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
		clean := elements[1]

		for _, char := range strings.Split(clean, "") {
			if " " == char {
				continue
			}

			sentence = strings.Replace(sentence, char, "", -1)
		}

		fmt.Println(sentence)

		line, _, rErr = reader.ReadLine()
	}
}
