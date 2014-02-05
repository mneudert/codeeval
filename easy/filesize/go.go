package main

import (
	"fmt"
	"os"
)

func main() {
	if 2 != len(os.Args) {
		fmt.Println("Input file missing!")
		os.Exit(1)
	}

	info, oErr := os.Stat(os.Args[1])
	if oErr != nil {
		fmt.Printf("Error stating file: %v\n", oErr)
		os.Exit(1)
	}

	fmt.Println(info.Size())
}
