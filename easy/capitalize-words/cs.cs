using System;
using System.IO;
using System.Linq;

class Program
{
    static void Main(string[] args)
    {
        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string line = reader.ReadLine();

            if (null == line)
            {
                continue;
            }

            Console.WriteLine(
                string.Join(
                    " ",
                    line.Split(' ').Select( w => char.ToUpper(w[0]) + w.Substring(1))
                )
            );
        }
    }
}
