set file [open [lindex $argv 0] r]
set ages [split [read $file] "\n"]

foreach age $ages {
    if {0 == [string length $age]} {
        continue
    }

    if {$age < 0 || $age > 100} {
        puts "This program is for humans"
        continue
    }

    if {$age <= 2} {
        puts "Still in Mama's arms"
    } elseif {$age <= 4} {
        puts "Preschool Maniac"
    } elseif {$age <= 11} {
        puts "Elementary school"
    } elseif {$age <= 14} {
        puts "Middle school"
    } elseif {$age <= 18} {
       puts "High school"
    } elseif {$age <= 22} {
        puts "College"
    } elseif {$age <= 65} {
        puts "Working for the man"
    } else {
        puts "The Golden Years"
    }
}
