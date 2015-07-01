set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set longest ""

    foreach word [split $line " "] {
        if {[string length $longest] >= [string length $word]} {
            continue
        }

        set longest $word
    }

    set length [string length $longest]

    for {set i 0} {$i < $length} {incr i} {
        if {0 < $i} {
            puts -nonewline " "
        }

        puts -nonewline [string repeat "*" $i]
        puts -nonewline [string index $longest $i]
    }

    puts ""
}

close $file
