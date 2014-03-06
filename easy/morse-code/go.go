package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"
)

var morseMap = map[string]string{
	".-":    "A",
	"-...":  "B",
	"-.-.":  "C",
	"-..":   "D",
	".":     "E",
	"..-.":  "F",
	"--.":   "G",
	"....":  "H",
	"..":    "I",
	".---":  "J",
	"-.-":   "K",
	".-..":  "L",
	"--":    "M",
	"-.":    "N",
	"---":   "O",
	".--.":  "P",
	"--.-":  "Q",
	".-.":   "R",
	"...":   "S",
	"-":     "T",
	"..-":   "U",
	"...-":  "V",
	".--":   "W",
	"-..-":  "X",
	"-.--":  "Y",
	"--..":  "Z",
	"-----": "0",
	".----": "1",
	"..---": "2",
	"...--": "3",
	"....-": "4",
	".....": "5",
	"-....": "6",
	"--...": "7",
	"---..": "8",
	"----.": "9",
}

func main() {
	file, _ := os.Open(os.Args[1])

	defer file.Close()

	reader := bufio.NewReader(file)
	line, _, rErr := reader.ReadLine()

	for rErr == nil {
		for _, char := range strings.Split(string(line), " ") {
			if "" == char {
				fmt.Print(" ")
			} else {
				fmt.Print(morseMap[char])
			}
		}

		fmt.Println()

		line, _, rErr = reader.ReadLine()
	}
}
