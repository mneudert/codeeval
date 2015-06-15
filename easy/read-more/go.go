package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"
)

func snip(line string) {
	if 55 >= len(line) {
		fmt.Println(line)
		return
	}

	snip := line[0:40]

	if strings.Contains(snip, " ") {
		snip = line[0:(strings.LastIndex(snip, " "))]
		snip = strings.TrimSpace(snip)
	}

	fmt.Println(snip + "... <Read More>")
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		snip(strings.TrimSpace(string(line)))

		line, _, rErr = reader.ReadLine()
	}
}
