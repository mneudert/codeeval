set file [open [lindex $argv 0] r]
set lines [split [read $file] "\n"]

foreach line $lines {
    if {0 == [string length $line]} {
        continue
    }

    set seqs [split $line " "]
    set bin  ""

    for {set i 0} {$i < [llength $seqs]} {incr i 2} {
      set flag [lindex $seqs $i]
      set seq  [lindex $seqs [expr int($i + 1)]]

      if {[string equal $flag "0"]} {
        append bin $seq
      } else {
        append bin [string repeat "1" [string length $seq]]
      }
    }

    puts [expr "0b$bin"]
}

close $file
