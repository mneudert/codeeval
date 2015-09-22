set file [open [lindex $argv 0] r]
set schedules [split [read $file] "\n"]

foreach schedule $schedules {
    if {0 == [string length $schedule]} {
        continue
    }

    puts [join [lsort -decreasing [split $schedule " "]] " "]
}

close $file
