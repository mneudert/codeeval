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
	lineRaw, isPartial, rErr := reader.ReadLine()

	for rErr == nil {
		line := string(lineRaw)

		for isPartial {
			lineCont, isPartial, _ := reader.ReadLine()
			line = fmt.Sprintf("%s%s", line, string(lineCont))

			if !isPartial {
				break
			}
		}

		counts := map[string]int{}
		elements := strings.Split(line, ",")

		for _, elem := range elements {
			if _, exists := counts[elem]; exists {
				counts[elem] = counts[elem] + 1
			} else {
				counts[elem] = 1
			}
		}

		major := "None"
		threshhold := len(elements) / 2

		for elem, count := range counts {
			if count >= threshhold {
				major = elem
				break
			}
		}

		fmt.Println(major)

		lineRaw, isPartial, rErr = reader.ReadLine()
	}
}
