array set conv {
    zero  0
    one   1
    two   2
    three 3
    four  4
    five  5
    six   6
    seven 7
    eight 8
    nine  9
}

set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set digits [split $line ";"]

    foreach digit $digits {
        puts -nonewline $conv($digit)
    }

    puts ""
}

close $file
