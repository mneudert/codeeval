set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set words [split [string trim $line] " "]

    for {set i 0} {$i < [llength $words]} {incr i} {
        set c_first [string index [lindex $words $i] 0]
        set c_last [string index [lindex $words $i] end]

        lset words $i [string replace [lindex $words $i] end end $c_first]
        lset words $i [string replace [lindex $words $i] 0 0 $c_last]
    }

    puts [join $words " "]
}

close $file
