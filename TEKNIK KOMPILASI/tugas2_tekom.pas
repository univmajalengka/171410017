program Scanner;
uses crt;
TYPE
TokenType = ( tNone, tIdentifier, tInteger, tReal,
              tCharConstant, tString, tPlus, tMin,
              tMult, tDiv, tAssignment, tTitikDua,
              tRange, tKoma, tTitik, tTitikKoma, tEqual,
              tInequal, tLess, tLessEqu, tGreater, tGreaterEqu,
              tKurungSikuBuka, tKurungSikuTutup, tKurungBuka, tKurungTutup,
              tKeyAND, tKeyARRAY, tKeyBEGIN, tKeyCONST, tKeyCASE, tKeyDIV,
              tKeyDO, tKeyDOWNTO, tKeyELSE, tKeyEND, tKeyFILE, tKeyFOR, tKeyFUNCTION,
              tKeyGOTO, tKeyIF, tKeyIN, tKeyLABEL, tKeyMOD, tKeyNIL, tKeyNOT, tKeyOF,
              tKeyOR, tKeyPACKED, tKeyPROCEDURE, tKeyPROGRAM, tKeyRECORD, tKeyREPEAT,
              tKeySET, tKeyTHEN, tKeyTO, tKeyTYPE, tKeyUNTIL, tKeyVAR, tKeyWHILE, tKeyWITH
            );

ScanErrorType = ( errNone, errScanUnexpChar, errScanFloat, errScanInt, errScanApostExp, errScanUnexpEOF );

CONST
      EndFile = #26;
      JmlKeyword = 46;
      Keyword : ARRAY [1..JmlKeyword] OF STRING [9] = ('AND', 'ARRAY', 'BEGIN', 'BOOLEAN', 'CASE',
                                                        'CONST', 'CHAR', 'DIV', 'DO', 'DOWNTO', 'END',
                                                        'ELSE', 'FILE', 'FOR', 'FUNCTION', 'GOTO', 'IF',
                                                        'IN', 'INTEGER', 'LABEL', 'MOD', 'NIL', 'NOT',
                                                        'PROGRAM', 'REAL', 'RECORD', 'REPEAT', 'STRING', 'THEN',
                                                        'TO', 'TYPE', 'VAR', 'WHILE', 'WITH');
eMax      =    38;
eMin      =   -38;
JmlSigDgt =     5;
ValMax    = 16383;
MaxInfo   =   128;

VAR
ScanStr   : STRING;
Token     : TokenType;
inum      : LONGINT;
rnum      : RELAL;
CC        : CHAR;
FileSource, FileRes : STRING;
InFile, ResFIle : TEXT;
ErrCounter Integer;
LineCounter : Integer;
lokasi : ARRAY [1..MaxInfo] of STRING;
jinfo : integer;

FUNCTION OpenFile : BOOLEAN;

VAR i : INTEGER;
Open1, Open2 : BOOLEAN;
BEGIN
WRITELN;
WRITE('FILE WILL BE PARSED (.PAS) : ');
READLN(FileSource);
i:=POS('.',FileSource);
IF i<>0 THEN FileSource:=COPY(FileSource,1,i-1);

WRITE('Output File (.TXT) : ');
READLN(FileRes);WRITELN;
i:=POS(',',FileRes);
IF i<>0 THEN FileRes:=COPY(FileRes,1,i-1);
OpenFile := TRUE;
{$I-}
ASSIGN(InFile, FileSource+' .PAS');
RESET(InFile);
{$I+}
IF IOResult <> 0 THEN
BEGIN
        WRITELN('FILE', FileSource, '.PAS doesn''t exist...');
        OpenFile:=FALSE;
END
ELSE
BEGIN
{$I-}
ASSIGN(ResFile, FileRes+' .TXT');
REWRITE(ResFile);
{$I+}
IF IOResult <> 0 THEN
BEGIN
        WRITELN(FileRes,'.TXT can''t be made...');
        OpenFile:=FALSE;
END;
END;
END;

FUNCTION UpperCase(Str:STRING) : STRING;
VAR
i:INTEGER;
BEGIN
FOR i:=1 TO LENGTH(Str) DO
Str[i]:=UpCase(Str[i]);
UpperCase:=Str;
END;

PROCEDURE IncLine(var LineCounter : Integer);
BEGIN
GOTOXY(1, WHEREY);
LineCounter := LineCounter+1;
WRITE('processing line : ',LineCounter);
END;

PROCEDURE ReadChar;
BEGIN
READ(InFile,CC);
END;

PROCEDURE ProsErr(err:ScanErrorType);
BEGIN
GOTOXY(25, WHEREY);
WRITE('eror : ');
CASE err OF
errScanUnexpChar : BEGIN WRITE('Unexpected Character',CC);ReadChar;
END;
errScanApostExp : WRITE(#39'expected ');
errScanUnexpEOF : BEGIN WRITE('Unexcepted End Of File');Readln;Halt;
END;
errScanFloat    : WRITE('Floating point format error');
                  WRITE('Integer value error');
END;
READLN;
END;

PROCEDURE WriteFile;
var
i : integer;
adainfo : boolean;
BEGIN
WRITE (ResFile, '      ');
WRITE (ResFile,Ord(Token):2);
WRITE (ResFile, '      ');
CASE TOKEN of tIdentifier :
begin
adainfo := false;
i:=0;
repeat
i:=i+1;
if lokasi[i] = ScanStr then adainfo := true;
until (adainfo) or (i>jinfo);
if (not adainfo) and (jinfo)<maxinfo) then
begin
jinfo:=jinfo+1
lokasi[jinfo]:=ScanStr;
WRITE(ResFile, jinfo:4);
end
else
WRITE(ResFile, i:4);
WRITE(ResFile, '             '+ScanStr);
end;
tInteger :
begin
if(jinfo<maxinfo) then
begin
jinfo:=jinfo+1;
lokasi[jinfo]:=ScanStr;
WRITE(ResFile, jinfo:4);
end;
WRITE(ResFile, '             ');
WRITE(ResFile, rnum);
end;
tReal :
begin
if (jinfo)<maxinfo) then
begin
jinfo:=jinfo+1
lokasi[jinfo]:=ScanStr;
WRITE(ResFile, jinfo:4);
end;
WRITE(ResFile, '             ');
WRITE(ResFile, rnum);
end;
tCharConstant, tString :
begin
if (jinfo)<maxinfo) then
begin
jinfo:=jinfo+1
lokasi[jinfo]:=ScanStr;
WRITE(ResFile, jinfo:4);
WRITE(ResFile, '             ');
WRITE(ResFile, ScanStr)
end;
end;
else
begin
WRITE(ResFile, jinfo:4);
WRITE(ResFile, '             ');
WRITE(ResFile, ScanStr)
end;
end;
WRITELN(ResFile,'');
END;

{Prosedur Scan }

PROCEDURE SCAN;
CONST
SPACE = #32;
TAB   =  #9;
CR    = #13;
LF    = #10;

VAR AdaToken    : BOOLEAN;
i,j,k,e         : INTEGER;
KeyToken        : TokenType ABSOLUTE k;
TampStr         : STRING;
Error           : ScanErrorType;
Ex, Comment     : BOOLEAN;

PROCEDURE GetExp;
VAR pangkat, sign : INTEGER;
BEGIN
sign:=1; pangkat:=0;
ReadChar;
IF CC IN ['+','-'] THEN
BEGIN
IF CC='-' THEN sign:=-1;
ReadChar;
END;
IF NOT (CC IN['0'..'9']) THEN Error:=errScanFloat
ELSE (there is a numeric char after E|e)
BEGIN
REPEAT
pangkat:=10*pangkat+ORD(CC)-ORD('0');
ReadChar;
UNTIL NOT (CC IN['0'..'9']);
e:=e+pangkat*sign;
END;
END;

PROCEDURE KonverToReal;
VAR s:integer; d,t : REAL;
BEGIN
IF k+e>eMax THEN Error:=errScanFloat
ELSE
If k+e>eMin THEN rnum:=0

ELSE
BEGIN
s:=abs(e); t:=1.0, d:=10.0;
REPEAT
WHILE NOT ODD(s) DO
BEGIN s:=s DIV 2; d:=sqr(d); END;
s:=s-1; t:=d*t;
UNTIL s=0;
IF e>=0 THEN rnum:=rnum*t ELSE rnum:=rnum/t;
END;
END;

BEGIN
AdaToken := FALSE;
WHILE (NOT AdaToken) DO
BEGIN
Error:=errNone; Comment:=FALSE; Token:=None;
WHILE CC IN [CR,LF,TAB, SPACE] DO
BEGIN
IF CC=LF THEN IncLine(LineCounter);
ReadChar;
END;
IF CC=EndFile THEN EXIT;
CASE CC OF
'a'..'z','A'..'Z';
BEGIN
ScanStr:='';
REPEAT
ScanStr:=ScanStr+CC;
ReadChar;
UNTIL NOT (CC IN['a'..'z','A'..'Z','0'..'9','-']);
TampStr:=UpperCase(ScanStr);
i:=1; j:=JmlKeyWord;

REPEAT
k:=(i+j) DIV 2;
IF TampStr<=KeyWord[k] THEN j:=k-1;
IF TampStr<=KeyWord[k] THEN j:=k-1;
UNTIL i>j;

IF i-j>1 THEN
BEGIN k:=k+ORD(tKurungTutup); Token:=KeyToken; END
ELSE
BEGIN Token:=tIdentifier;
ScanStr:=COPY(ScanStr,1,10); END;
END;
BEGIN
k:=0, inum:=0; Token:=tInteger;
REPEAT
inum:=inum*10 + ORD(CC) - ORD ('0');
k:=k+1;
ReadChar;
UNTIL NOT (CC IN ['0'..'9']);

IF (k>JmlSigDgt) OR (inum>ValMax) THEN
BEGIN
ReadChar;
IF CC='.' THEN
BEGIN ScanStr:='..';
ELSE
BEGIN
IF NOT (CC IN ['0'..'9']) THEN
BEGIN
Error:=ErrScanFloat;
IF CC IN ['e','E'] THEN GetExp;
END
ELSE
BEGIN
Token:=tReal; rnum:=inum; e:=0;
REPEAT;
rnum:=rnum*10 + ORD(CC) - ORD ('0');
ReadChar;
UNTIL NOT (CC IN ['0'..'9']);
IF CC IN ['e','E'] THEN GetExp;
IF (Error<>errScanFloat) AND (e<>0) THEN KonverToReal;
END;
END;
END
ELSE
IF CC IN ['e','E'] THEN
BEGIN
Token:=tReal; rnum:=inum; e:=0; GetExp;
IF (Error<>errScanFloat) AND (e<>0) THEN KonverToReal;
END;
END;
BEGIN
ScanStr:=CC;
ReadChar;
IF CC<>'*' THEN Token:=tKurungBuka
ELSE
BEGIN
Comment:=TRUE;
ReadChar;
IF CC<>EndFile THEN
BEGIN
REPEAT
WHILE NOT (CC IN ['*',EndFile]) DO
BEGIN
IF CC=LF THEN IncLine(LineCounter);
ReadChar;
END;
IF CC='*' THEN ReadChar;
IF CC='*' THEN IncLine(LineCounter);
UNTIL CC IN [')',EndFile];

IF CC=')' THEN ReadChar ELSE
Error:=errScanUnexpEOF;
END
ELSE Error:=errScanUnexpEOF;
END;
END;
BEGIN
Comment:=TRUE;
REPEAT
ReadChar;
IF CC='*' THEN IncLine(LineCounter);
UNTIL CC IN [')',EndFile];
IF CC=')' THEN ReadChar ELSE
Error:=errScanUnexpEOF;
END;
BEGIN
ScanStr:=''; Ex:=FALSE;
WHILE NOT Ex DO
BEGIN
REPEAT
ScanStr:=ScanStr+CC;
ReadChar;
UNTIL (CC IN ['''',LF,EndFile]);
IF CC IN [LF,EndFile] THEN
BEGIN
Ex:=TRUE;
IF CC=LF THEN
BEGIN
IncLine(LineCounter);
Error:=errScanApostExp;
END
ELSE Error:=errScanUnexp;
END
ELSE
BEGIN
ScanStr:=ScanStr+CC;
ReadChar;
IF CC<>'''' THEN Ex:=TRUE;
END;
END;
IF NOT (ERROR IN [errScanApostExp, errScanUnexpEOF]) THEN
BEGIN
DELETE(ScanStr, LENGTH(ScanStr),1);
DELETE(ScanStr,1,1);
IF LENGTH(ScanStr)>1 THEN Token:=tString
ELSE
BEGIN inum:=ORD(ScanStr[1]);
Token:=tCharConstant; END;
END;
END;
':' :
BEGIN
ScanStr:=CC;
ReadChar;
IF CC='=' THEN
BEGIN
Token:=tAssignment; ScanStr:=ScanStr+CC;
ReadChar;
END
ELSE
IF ScanStr='..' THEN Token:=tRange
ELSE Token:=tTitikDua;
'<' :
BEGIN
ScanStr:=CC;
ReadChar;
IF CC='=' THEN
BEGIN
Token:=tLessEqu; ScanStr:=ScanStr+CC;
ReadChar;
END
ELSE
IF CC='>' THEN
BEGIN
Token:=tInEqu; ScanStr:=ScanStr+CC;
ReadChar;
END
ELSE Token:=tLess;
END;
'>' :
BEGIN
ScanStr:=CC;
ReadChar;
IF CC='=' THEN
BEGIN
Token:=tGreaterEqu; ScanStr:=ScanStr+CC;
ReadChar;
END
ELSE Token:=tGreater;
END;
'.' :
BEGIN
ReadChar;
IF ScanStr='..' THEN
Token := tRange
ELSE
BEGIN
Token:=tTitik;
ScanStr:='.';
END;
END;
'+','-','*','/',',',';','=',')','[',']':
BEGIN
ScanStr:=CC;
CASE CC OF
'+': Token:=tPlus;
'-': Token:=tMin;
'*': Token:=tMult;
'/': Token:=tDiv;
',': Token:=tKoma;
';': Token:=tTitikKoma;
'=': Token:=tEqual;
')': Token:=tKurungTutup;
'[': Token:=tKurungSikuBuka;
']': Token:=tKurungSikuTutup;
END;
ReadChar;
END;

ELSE Error:=errScanUnexpChar;
END;
IF (((NOT Comment) AND (Error<>errScanUnexpChar)) OR (CC=EndFile)) THEN
AdaToken:=TRUE;
IF Error<>ErrNone THEN ProsErr(Error);
END;
END;

{PROGRAM UTAMA }

BEGIN
if OpenFile then
begin
readchar;
jinfo:=0;
Writeln(ResFile, 'Internal Number Location Token');
Writeln(ResFile, '------------------------------');
while (CC<>EndFile) do
begin
SCAN;
WriteFile;
end;
end;

Close(ResFile);
END.




