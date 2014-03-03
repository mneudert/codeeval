set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set longest ""

    foreach word [split $line " "] {
        if {[string length $longest] < [string length $word]} {
            set longest $word
        }
    }

    puts $longest
}

close $file
