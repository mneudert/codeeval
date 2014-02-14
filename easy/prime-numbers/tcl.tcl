proc genprime {from to} {
    global primes

    if {0 == [expr ($from + 1) % 2]} {
        set from [expr $from + 1]
    }

    for {set n [expr $from + 1]} {$n <= $to} {incr n 2} {
        set flag 1

        foreach prime $primes {
            if {0 == [expr $n % $prime]} {
                set flag 0
                break
            }
        }

        if {$flag} {
            lappend primes $n
        }
    }
}

set file [open [lindex $argv 0] r]
set limits [split [read $file] "\n"]
set primes 2

foreach limit $limits {
    if {0 == [string length $limit]} {
        continue
    }

    if {$limit > [lindex $primes end]} {
        genprime [lindex $primes end] $limit
    }

    set output [list]

    foreach prime $primes {
        if {$prime >= $limit} {
            break
        }

        lappend output $prime
    }

    puts [join $output ","]
}

close $file
