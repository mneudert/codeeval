set file [open [lindex $argv 0] r]
set hexes [split [read $file] "\n"]

foreach hex $hexes {
    if {0 == [string length $hex]} {
        continue
    }

    puts [scan $hex %x]
}

close $file
