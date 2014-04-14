array set map {
    a 0
    b 1
    c 2
    d 3
    e 4
    f 5
    g 6
    h 7
    i 8
    j 9
    0 0
    1 1
    2 2
    3 3
    4 4
    5 5
    6 6
    7 7
    8 8
    9 9
}

set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set none 1

    foreach char [split $line {}] {
        if {[info exists map($char)]} {
            puts -nonewline $map($char)
            set none 0
        }
    }

    if {$none} {
        puts -nonewline "NONE"
    }

    puts ""
}

close $file
