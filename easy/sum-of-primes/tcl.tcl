set primes 2
set n 2
set sum 0

while {1000 != [llength $primes]} {
    incr n
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

foreach prime $primes {
    set sum [expr $sum + $prime]
}

puts $sum
