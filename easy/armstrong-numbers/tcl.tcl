set file [open [lindex $argv 0] r]
set numbers [split [read $file] "\n"]

foreach number $numbers {
    if {0 == [string length $number]} {
        continue
    }

    set digits [split $number {}]
    set sum 0

    foreach digit $digits {
        set sum [expr int($sum + [tcl::mathfunc::pow $digit [string length $number]])]
    }

    if {$sum == $number} {
        puts "True"
    } else {
        puts "False"
    }
}

close $file
