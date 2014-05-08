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

            int[] numbers = line.Split(',').Select( d => Int32.Parse(d.ToString()) ).ToArray();
            int   n = numbers[0], m = numbers[1];

            while (n >= m)
            {
                n -= m;
            }

            Console.WriteLine(n);
        }
    }
}
