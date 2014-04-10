set file [open [lindex $argv 0] r]
set seqs [split [read $file] "\n"]

foreach seq $seqs {
    if {0 == [string length $seq]} {
        continue
    }

    set digits [split $seq " "]
    set last -1
    set count 0

    foreach digit $digits {
        if {$digit == $last} {
            set count [expr $count + 1]
            continue
        }

        if {-1 < $last} {
            puts -nonewline "$count $last "
        }

        set count 1
        set last $digit
    }

    puts "$count $last"
}

close $file
