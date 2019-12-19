unit Scanner;
interface
uses CRT;
const
ALNG            = 30;
eof             = #26;
tab             = #009;
LineFeed        = #010;
space           = #032;
car_return      = #013;

type
Alfa = string[ALNG];

tokens = {
t_int, t_add, t_sub, t_mul, t_rdiv, t_double_mul,
t_assign { ':=' },
t_lbrack { '[' }, t_rbrack { ']' },

t_lparent { '(' }, t_rparent { ')' },
t_id, t_else, t_if, t_then
);
const
num_reserved_word = 3;

KeyStr : array [1..num_reserved_word] of Alfa = (
'else', 'if', 'then'
);

KeySym : array [1..num_reserved_word] of tokens = (
t_else, t_if, t_then
);

var
FIn         : string[12];
FInput      : text;

LookAhead   : boolean;
Enum        : boolean;
Ch          : char;
token       : tokens;
Id          : Alfa;
Inum        : longint;
LineNumber  : integer;

procedure initialize;
procedure scan;
procedure terminate;

implementation

procedure Initialize;
begin
if (ParamCount < 1)
then repeat
Write(' File Sumber (.pas) ');
Readln(FIn);
until (Length(FIn) <> 0 )
else FIn := ParamStr(1);
if (Pos('.', FIn) = 0 )
then FIn := FIn + '.pas';
{$I-}
Assign(FInput, FIn);
Reset(FInput);
{$I+}
if (IOResult <> 0 )
then begin
Writeln('Tidak bisa mengkases File : ''', FIn, '''');
Halt;
end;

FIn ;= Copy(FIn, 1, Pos('.',FIn) -1 )
