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
            string number = reader.ReadLine();

            if (null == number)
            {
                continue;
            }

            Console.WriteLine(
                number.Select( d => Int32.Parse(d.ToString()) ).Sum()
            );
        }
    }
}
