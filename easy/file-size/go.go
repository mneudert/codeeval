package main

import (
	"fmt"
	"os"
)

func main() {
	info, _ := os.Stat(os.Args[1])

	fmt.Println(info.Size())
}
