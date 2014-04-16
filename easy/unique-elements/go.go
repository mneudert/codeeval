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
		uniques := []string{elements[0]}

		for _, elem := range elements {
			if uniques[len(uniques)-1] == elem {
				continue
			}

			uniques = append(uniques, elem)
		}

		fmt.Println(strings.Join(uniques, ","))

		line, _, rErr = reader.ReadLine()
	}
}
