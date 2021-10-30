<?php
namespace mf\utils;

    class ClassLoader extends AbstractClassLoader{
        public function getFilename(string $classname): string{
            $nomClasse = '';
            $nomClasse = str_replace("\\",DIRECTORY_SEPARATOR,$classname);
            $nomClasse = $nomClasse.".php";
            return $nomClasse;
        }
        public function makePath(string $filename):string{
            $nomFichier = $this->prefix . DIRECTORY_SEPARATOR . $filename;
            return $nomFichier;
        }
        public function loadClass(string $classname)
        {
            $nomClasse = $this->getFilename($classname);
            $nomClassePrefixe = $this->makePath($nomClasse);
            if(file_exists($nomClassePrefixe)){
                require_once ($nomClassePrefixe);
            }
        }
    }
?>