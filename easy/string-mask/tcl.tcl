set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set input [split $line " "]
    set string [string tolower [lindex $input 0]]
    set mask [lindex $input 1]

    for {set i 0} {$i < [string length $string]} {incr i} {
        if {"1" == [string index $mask $i]} {
            puts -nonewline [string toupper [string index $string $i]]
        } else {
            puts -nonewline [string index $string $i]
        }
    }

    puts ""
}

close $file
