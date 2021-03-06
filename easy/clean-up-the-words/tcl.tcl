set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    puts [
      string trim [
        regsub -all {\W+} [
          regsub -all {[^a-z]} [string tolower $line] " "
        ] " "
      ]
    ]
}

close $file
