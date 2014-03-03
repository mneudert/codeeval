set file [open [lindex $argv 0] r]
set trips [split [read $file] "\n"]

foreach trip $trips {
    if {0 == [string length $trip]} {
        continue
    }

    set cities [split $trip ";"]
    set distances {}

    foreach city $cities {
        if {0 == [string length $city]} {
            continue
        }

        set stop [split [string trim $city] ","]
        lappend distances [lindex $stop 1]
    }

    set distances [lsort -integer $distances]
    set route [lindex $distances 0]

    for {set x 1} { $x < [llength $distances]} {incr x} {
        lappend route [expr [lindex $distances $x] - [lindex $distances $x-1]]
    }

    puts [join $route ","]
}

close $file
