set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    foreach char [split $line {}] {
        set ascii [scan $char %c]

        if {65 <= $ascii && 90 >= $ascii} {
            puts -nonewline [format %c [expr int($ascii + 32)]]
            continue
        }

        if {97 <= $ascii && 122 >= $ascii} {
            puts -nonewline [format %c [expr int($ascii - 32)]]
            continue
        }

        puts -nonewline $char
    }

    puts ""
}

close $file
