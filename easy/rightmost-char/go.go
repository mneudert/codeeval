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
		def := strings.Split(string(line), ",")

		fmt.Println(strings.LastIndex(def[0], def[1]))

		line, _, rErr = reader.ReadLine()
	}
}
