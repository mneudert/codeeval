set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    puts -nonewline "1"

    for {set i 1} {$i < $line} {incr i} {
        puts -nonewline " 1"

        set current 1

        for {set j 1} {$j <= $i} {incr j} {
            set current [expr (($current * ($i + 1- $j)) / $j)]

            puts -nonewline " $current"
        }
    }

    puts ""
}

close $file
