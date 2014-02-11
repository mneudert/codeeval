set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set nums [split $line " "]
    set fizz [lindex $nums 0]
    set buzz [lindex $nums 1]

    for {set n 1} {$n <= [lindex $nums 2]} {incr n} {
        if {1 < $n} {
            puts -nonewline " "
        }

        set fm [expr int($n % $fizz)]
        set bm [expr int($n % $buzz)]

        if {!$fm && !$bm} {
            puts -nonewline "FB"
            continue
        }

        if {$fm && !$bm} {
            puts -nonewline "B"
            continue
        }

        if {!$fm && $bm} {
            puts -nonewline "F"
            continue
        }

        puts -nonewline $n
    }

    puts ""
}

close $file
