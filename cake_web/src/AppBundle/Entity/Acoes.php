<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acoes
 *
 * @ORM\Table(name="acoes", uniqueConstraints={@ORM\UniqueConstraint(name="descricao_UNIQUE", columns={"descricao"})}, indexes={@ORM\Index(name="id_tipo_acao_idx", columns={"id_tipo_acao"})})
 * @ORM\Entity
 */
class Acoes
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TipoAcao
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TipoAcao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_acao", referencedColumnName="id")
     * })
     */
    private $idTipoAcao;



    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Acoes
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTipoAcao
     *
     * @param \AppBundle\Entity\TipoAcao $idTipoAcao
     *
     * @return Acoes
     */
    public function setIdTipoAcao(\AppBundle\Entity\TipoAcao $idTipoAcao = null)
    {
        $this->idTipoAcao = $idTipoAcao;

        return $this;
    }

    /**
     * Get idTipoAcao
     *
     * @return \AppBundle\Entity\TipoAcao
     */
    public function getIdTipoAcao()
    {
        return $this->idTipoAcao;
    }
}
