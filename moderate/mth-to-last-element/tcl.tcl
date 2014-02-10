set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set elements [lreverse [split $line " "]]
    puts [lindex $elements [lindex $elements 0]]
}

close $file
